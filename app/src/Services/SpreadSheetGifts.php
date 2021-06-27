<?php


namespace App\Services;

use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Yectep\PhpSpreadsheetBundle\Factory;

class SpreadSheetGifts {

    /**
     * @param $columnNames
     * @param $columnValues
     * @param string $filename
     * @return StreamedResponse
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function export_cvs($columnNames, $columnValues, string $filename): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        for ($i = 0, $l = sizeof(array_pop($columnNames)); $i < $l; $i++) {
            $sheet->setCellValueByColumnAndRow($i + 1, 1, $columnNames[$i]);
        }
        foreach ($columnValues as $column) {
            $cleanValues = str_replace('Éditer', '', (str_replace("Voir", "", $column)));
            $columns[] = array_filter(explode("\n", $cleanValues));
        }

        for ($i = 0, $l = sizeof($columns); $i < $l; $i++) { // row $i
            $j = 0;
            foreach ($columns[$i] as $k => $v) { // column $j
                $sheet->setCellValueByColumnAndRow($j + 1, ($i + 1 + 1), trim($v));
                $j++;
            }
        }

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
        $writer->save('/var/www/app/'.$filename.'.xlsx');
    }
}