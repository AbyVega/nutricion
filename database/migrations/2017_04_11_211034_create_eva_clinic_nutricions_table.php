<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateEvaClinicNutricionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Eva_clinic_nutricions", 'eva_clinic_nutricions', 'tiempo_comida_dia', 'fa-cube', [
            ["tiempo_comida_dia", "Tiempos  comida dia", "TextField", false, "8 horas", 50, 200, true],
            ["comidas_fuera_casa", "comidas fuera casa", "Multiselect", false, "", 0, 256, true, ["De 1 a 2 veces por semana","De 3 a 4 veces por semana","De 5 a 6 veces por semana","Mas de 7 veces por semana","Ninguna vez"]],
            ["bebidas_frecuentes", "bebidas  frecuentes", "Multiselect", false, "", 0, 0, true, ["Refrescos","Jugos Naturales","Jugos Artificiales","Bebidas Alcoholicas","Agua Natural"]],
            ["sal_extra", "Agregas sal extra", "Radio", false, "No", 0, 0, true, ["Si","No"]],
            ["problemas_dentales", "problemas dentales", "Radio", false, "No", 0, 0, true, ["SI","No"]],
            ["hora_mayor_apetito", "hora mayor apetito", "TextField", false, "", 0, 256, true],
            ["dieta", "has estado en dieta", "Radio", false, "", 0, 0, true, ["Si","No"]],
            ["tipo_dieta", "tipo de dieta", "TextField", false, "", 0, 256, true],
            ["tiempo_dieta", "cuandoYcuanto tiempo", "TextField", false, "", 0, 256, true],
            ["motivo_dieta", "porque inicio dieta", "TextField", false, "bajar de peso", 0, 256, true],
            ["obtuvo_resultados", "obtuvo resultados", "Radio", false, "Si", 0, 0, true, ["Si","No"]],
            ["consume_alcohol", "consume alcohol ", "Radio", false, "No", 0, 0, true, ["Si","No"]],
            ["frecuencia_consumo", "frecuencia consumo", "Multiselect", false, "", 0, 0, true, ["De 1 a 2 veces por semana","De 3 a 4 veces por semana","De 5 a 6 veces por semana","Mas de 7 veces por semana"]],
            ["tiempo_duerme", "tiempo que duerme", "Multiselect", false, "Tiempo que duerme", 0, 0, true, ["De 3 a 6 horas","De 5 a 8 horas","De 6 a 10 horas","Mas de 10 horas","Menos de 3 horas"]],
            ["consumo_agua", "consumo agua", "Multiselect", false, "", 0, 0, true, ["De 1 a 3 vasos","De 5 a 6 vasos","De 7 a 9 vasos","Mas de 10 vasos","Menos de 1 vaso"]],
            ["act_fisica", "actividad fisica", "Radio", false, "", 0, 0, true, ["Si","No"]],
            ["frecuencia_actividad", "frecuencia actividad", "Multiselect", false, "", 0, 0, true, ["De 1 a 3 veces por semana","De 4 a 6 veces por semana","Mas de 7 veces por semana"]],
            ["tipo_actividad", "tipo actividad", "Multiselect", false, "", 0, 0, true, ["Correr","Caminar","GYM","Natacion","Zumba","Otras"]],
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
        if (Schema::hasTable('eva_clinic_nutricions')) {
            Schema::drop('eva_clinic_nutricions');
        }
    }
}
