<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateEvaluAntropometricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Evalu_antropometricas", 'evalu_antropometricas', 'fache', 'fa-anchor', [
            ["fache", "fecha", "Date", false, "2017-11-09", 0, 0, true],
            ["talla", "talla", "Decimal", false, "1.89", 0, 11, true],
            ["peso", "peso", "Decimal", false, "78.9", 0, 11, true],
            ["circ_abdominal", "circ_abdominal", "Decimal", false, "78.0", 0, 11, true],
            ["cintura", "cintura", "Decimal", false, "45.6", 0, 11, true],
            ["cadera", "cadera", "Decimal", false, "67.9", 0, 11, true],
            ["musculo", "musculo", "TextField", false, "78%", 0, 256, true],
            ["viseral", "viseral", "TextField", false, "2%", 0, 256, false],
            ["act_fisica", "act_fisica", "Multiselect", false, "", 0, 0, true, ["sedentario"]],
            ["pcb", "pcb", "TextField", false, "", 0, 256, true],
            ["pct", "pct", "TextField", false, "", 0, 256, true],
            ["cmb", "cmb", "TextField", false, "", 0, 256, true],
            ["pcse", "pcse", "TextField", false, "", 0, 256, true],
            ["pcsi", "pcsi", "TextField", false, "", 0, 256, true],
            ["grasa_corporal", "grasa_corporal", "TextField", false, "", 0, 256, true],
            ["agua", "agua", "TextField", false, "", 0, 256, true],
            ["kcal", "kcal", "TextField", false, "", 0, 256, true],
            ["imc", "imc", "TextField", false, "", 0, 256, true],
            ["comentarios", "comentarios", "Textarea", false, "", 0, 0, false],
        ]);
		
		/*
		Row Format:
		["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
        Module::generate("Module_Name", "Table_Name", "view_column_name" "Fields_Array");
        
		Module::generate("Books", 'books', 'name', [
            ["address",     "Address",      "Address",  false, "",          0,  1000,   true],
            ["restricted",  "Restricted",   "Checkbox", false, false,       0,  0,      false],
            ["price",       "Price",        "Currency", false, 0.0,         0,  0,      true],
            ["date_release", "Date of Release", "Date", false, "date('Y-m-d')", 0, 0,   false],
            ["time_started", "Start Time",  "Datetime", false, "date('Y-m-d H:i:s')", 0, 0, false],
            ["weight",      "Weight",       "Decimal",  false, 0.0,         0,  20,     true],
            ["publisher",   "Publisher",    "Dropdown", false, "Marvel",    0,  0,      false, ["Bloomsbury","Marvel","Universal"]],
            ["publisher",   "Publisher",    "Dropdown", false, 3,           0,  0,      false, "@publishers"],
            ["email",       "Email",        "Email",    false, "",          0,  0,      false],
            ["file",        "File",         "File",     false, "",          0,  1,      false],
            ["files",       "Files",        "Files",    false, "",          0,  10,     false],
            ["weight",      "Weight",       "Float",    false, 0.0,         0,  20.00,  true],
            ["biography",   "Biography",    "HTML",     false, "<p>This is description</p>", 0, 0, true],
            ["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 250,  false],
            ["pages",       "Pages",        "Integer",  false, 0,           0,  5000,   false],
            ["mobile",      "Mobile",       "Mobile",   false, "+91  8888888888", 0, 20,false],
            ["media_type",  "Media Type",   "Multiselect", false, ["Audiobook"], 0, 0,  false, ["Print","Audiobook","E-book"]],
            ["media_type",  "Media Type",   "Multiselect", false, [2,3],    0,  0,      false, "@media_types"],
            ["name",        "Name",         "Name",     false, "John Doe",  5,  250,    true],
            ["password",    "Password",     "Password", false, "",          6,  250,    true],
            ["status",      "Status",       "Radio",    false, "Published", 0,  0,      false, ["Draft","Published","Unpublished"]],
            ["author",      "Author",       "String",   false, "JRR Tolkien", 0, 250,   true],
            ["genre",       "Genre",        "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],
            ["description", "Description",  "Textarea", false, "",          0,  1000,   false],
            ["short_intro", "Introduction", "TextField",false, "",          5,  250,    true],
            ["website",     "Website",      "URL",      false, "http://dwij.in", 0, 0,  false],
        ]);
		*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('evalu_antropometricas')) {
            Schema::drop('evalu_antropometricas');
        }
    }
}
