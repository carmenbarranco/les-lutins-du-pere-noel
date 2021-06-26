const $ = require('jquery');
require('bootstrap');
import 'popper.js';
window.jQuery = $;
require('./styles/app.scss');

$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});