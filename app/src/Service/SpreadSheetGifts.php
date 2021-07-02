<?php


namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Exception;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;

class SpreadSheetGifts {
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @param $columnNames
     * @param $columnValues
     * @param string $filename
     */
    public function export_cvs($columnNames, $columnValues, string $filename)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        array_pop($columnNames);
        for ($i = 0, $l = sizeof($columnNames); $i < $l; $i++) {
            $sheet->setCellValueByColumnAndRow($i + 1, 1, $columnNames[$i]);
        }
        foreach ($columnValues as $column) {
            $cleanValues = str_replace('Éditer', '', (str_replace("Voir", "", $column)));
            $cleanArray = explode("\n", str_replace("  ", "", $cleanValues));
            $columns[] = array_filter($cleanArray);
        }

        for ($i = 0, $l = sizeof($columns); $i < $l; $i++) { // row $i
            $j = 0;
            foreach ($columns[$i] as $k => $v) { // column $j
                $sheet->setCellValueByColumnAndRow($j + 1, ($i + 1 + 1), trim($v));
                $j++;
            }
        }

        $writer = new Csv($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
        try {
            $writer->save('/var/www/app/public/uploads/' . $filename . '.csv');
            $this->notifier->send(New Notification('Télechargement réussi', ['browser']));
        } catch (Exception $e) {
            $this->notifier->send(New Notification('Échec', ['browser']));
            echo $e->getMessage();
        }

    }
}