<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreatePlanesAlimenticiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Planes_alimenticios", 'planes_alimenticios', 'verduras_colacion', 'fa-adn', [
            ["verduras_desayuno", "verduras desayuno", "TextField", false, "", 0, 256, true],
            ["verduras_colacion", "verduras colacion", "TextField", false, "", 0, 256, true],
            ["verduras_comida", "verduras comida", "TextField", false, "", 0, 256, true],
            ["verura_colacion_tar", "verdura colacion tar", "TextField", false, "", 0, 256, true],
            ["verduras_cena", "verduras cena", "TextField", false, "", 0, 256, true],
            ["frutas_desayuno", "frutas desayuno", "TextField", false, "", 0, 256, true],
            ["frutas_colacion_man", "frutas colacion", "TextField", false, "", 0, 256, true],
            ["frutas_comida", "frutas comida", "TextField", false, "", 0, 256, true],
            ["frutas_colacion_tar", "frutas colacion tar", "TextField", false, "", 0, 256, true],
            ["frutas_cena", "frutas cena", "TextField", false, "", 0, 256, true],
            ["cereales_desayuno", "cereales dasayuno", "TextField", false, "", 0, 256, true],
            ["cerales_colacion_man", "cereales colacion", "TextField", false, "", 0, 256, true],
            ["cereales_comida", "cereales comida", "TextField", false, "", 0, 256, true],
            ["cereal_colacion_tar", "cereales colacion", "TextField", false, "", 0, 256, true],
            ["cereales_cena", "cereales cena", "TextField", false, "", 0, 256, true],
            ["desayuno_leguminosas", "desayuno leguminosas", "TextField", false, "", 0, 256, true],
            ["leguminosas_colacion", "leguminosas colacion", "TextField", false, "", 0, 256, true],
            ["leguminosas_comida", "leguminosas comida", "TextField", false, "", 0, 256, true],
            ["leguminosasColacionT", "leguminos colacion t", "TextField", false, "", 0, 256, true],
            ["leguminosas_cena", "leguminosas cena", "TextField", false, "", 0, 256, true],
            ["AoA_desayuno", "AoA desayuno", "TextField", false, "", 0, 256, true],
            ["AoA_colacion_man", "AoA colacion man", "TextField", false, "", 0, 256, true],
            ["AoA_comida", "AoA comida", "TextField", false, "", 0, 256, true],
            ["AoA_colacion_tar", "AoA colacion tar", "TextField", false, "", 0, 256, true],
            ["AoA_cena", "AoA cena", "TextField", false, "", 0, 256, true],
            ["leche_desayuno", "leche desayuno", "TextField", false, "", 0, 256, true],
            ["leche_desayuno_man", "leche colacion", "TextField", false, "", 0, 256, true],
            ["leche_comida", "leche comida", "TextField", false, "", 0, 256, true],
            ["leche_colacion_tar", "leche colacion tar", "TextField", false, "", 0, 256, true],
            ["leche_cena", "leche cena", "TextField", false, "", 0, 256, true],
            ["aceites_A_dasayuno", "aceites A desayuno", "TextField", false, "", 0, 256, true],
            ["aceites_A_colacion_m", "aceites A colacion", "TextField", false, "", 0, 256, true],
            ["aceites_A_comida", "aceites A comida", "TextField", false, "", 0, 256, true],
            ["aceites_A_colacion_t", "aceites A colacion t", "TextField", false, "", 0, 256, true],
            ["aceites_A_cena", "aceites A cena", "TextField", false, "", 0, 256, true],
            ["aceites_B_dasayuno", "aceites B desayuno", "TextField", false, "", 0, 256, true],
            ["aceites_B_colacion_m", "aceites B colacion m", "TextField", false, "", 0, 256, true],
            ["aceites_B_comida", "aceites B comida", "TextField", false, "", 0, 256, true],
            ["aceites_B_colacion_t", "aceites B colacion t", "TextField", false, "", 0, 256, true],
            ["aceites_B_cena", "aceites B cena", "TextField", false, "", 0, 256, true],
            ["azucares_desayuno", "azucares desayuno", "TextField", false, "", 0, 256, true],
            ["azucares_colacion_m", "azucares colacion m", "TextField", false, "", 0, 256, true],
            ["azucares_comida", "azucares comida", "TextField", false, "", 0, 256, true],
            ["azucares_colacion_t", "azucares colacion t", "TextField", false, "", 0, 256, true],
            ["azucares_cena", "azucares cena", "TextField", false, "", 0, 256, true],
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
        if (Schema::hasTable('planes_alimenticios')) {
            Schema::drop('planes_alimenticios');
        }
    }
}
