<?php
    /*
     * @author J.Candelaria
     * getBarcodes.php
     *
     * Procedure that gets the following for a given Sierra barcde:
     *  * item record number with check digit in the following format:
     *       i1000031a
     *  * item record number in general integer format without check digit:
     *       i1000031
     *  * bib record number with check digit in the following format:
     *       b1001278
     *  * bib record integer in the following format:
     *       1001278
     *  * the item deletion date formatted in gmt to determine if the item has
     *       already been removed from your system.
     *  * the bib deletion date formatted in gmt to determine if the bib has
     *       already been removed from your system.
     * */

    /*
     * Libraries used: Vanilla
     * This app is very tiny. JQuery and other frameworks are not needed for functionality.
     * */

    /*
     * Testing operations:
     *  1 - general testing (using a predetermined list of barcodes.
     *      In institution-specific implementations, this list will vary. Please refer
     *      to the institution-specific section.
     *  2 - record-specific (this application is POST driven, but can use a single GET
     *      request for a single specific barcode. This helps with debugging
     *      The original app had NO debugging ability whatsoever.
     * */

    /*
     * This is where you put your dbauth requirements. This returns a pg-connection object that is VALID;
     * YOU supply this file.
     * It is your responsibility to use this on an account with NO ADMIN rights!
     * It is your responsibility to use this on an account with SELECT ONLY ACCESS!
     * */


require_once("dbauth.php");



init();
function init(){

}

/*
 * INSTITUTION SPECIFIC- THIS CODE NEEDS TO BE MODIFIED
 * */

$testBarcodesList = [];

/*
 * validateBarcode
 * @param givenBarcode is the string value of the barcode being tested
 * @returns true if barcode passed validation/ false if not
 * The purpose of this function is to help avoid SQL
 *
 * */
function validateBarcode($givenBarcode){}

/*
 * END OF INSTITUTION SPECIFIC CODE
 * */

?>
