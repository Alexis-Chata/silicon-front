<?php

namespace App\Apimoodle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apimoodle
{
    protected $endpointService = "http://aprendiendo.jademlearning.com/webservice/rest/server.php";

    public function token()
    {

        $response = Http::asForm()->post("http://aprendiendo.jademlearning.com/login/token.php", [
            'service' => "mood-serv",
            'username' => "admin",
            'password' => 'Admin#123.',
        ]);

        return $response->object();
    }

    /**
     * @param array $criteria
     * criteria[0][key]= string "name"              *requerido
     * criteria[0][value]= string "nombredelcurso"  *requerido
     */
    public function buscar_categoria_cursos($criteria = [])
    {
        $wsfunction = "core_course_get_categories";

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'criteria' => $criteria,
        ]);

        return $response->object();
    }

    /**
     * categories[0][name]= string  *requerido
     * categories[0][parent]= int
     * categories[0][idnumber]= string
     * categories[0][description]= string
     * categories[0][descriptionformat]= int
     * categories[0][theme]= string
     */
    public function crear_categoria_cursos($categories)
    {
        $wsfunction = "core_course_create_categories";

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'categories' => $categories,
        ]);

        return $response->object();
    }

    /**
     * Undocumented function
     *
     * @param array $courses
     *  courses[0][fullname]= string    *requerido
     *  courses[0][shortname]= string   *requerido
     *  courses[0][categoryid]= int     *requerido
     *  courses[0][idnumber]= string
     *  courses[0][summary]= string
     *  courses[0][summaryformat]= int
     *  courses[0][format]= string
     *  courses[0][showgrades]= int
     *  courses[0][newsitems]= int
     *  courses[0][startdate]= int
     *  courses[0][enddate]= int
     *  courses[0][numsections]= int
     *  courses[0][maxbytes]= int
     *  courses[0][showreports]= int
     *  courses[0][visible]= int
     *  courses[0][hiddensections]= int
     *  courses[0][groupmode]= int
     *  courses[0][groupmodeforce]= int
     *  courses[0][defaultgroupingid]= int
     *  courses[0][enablecompletion]= int
     *  courses[0][completionnotify]= int
     *  courses[0][lang]= string
     *  courses[0][forcetheme]= string
     *  courses[0][courseformatoptions][0][name]= string
     *  courses[0][courseformatoptions][0][value]= string
     *  courses[0][customfields][0][shortname]= string
     *  courses[0][customfields][0][value]= string
     * @return json
     */
    public function crear_cursos($courses)
    {
        $wsfunction = "core_course_create_courses";

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'courses' => $courses,
        ]);

        return $response->object();
    }

    /**
     * Devuelve contenido del curso (módulos + URL de archivos de servicio web)
     *
     * @param int $courseid
     * @return json
     */
    public function obtener_contenido_curso($courseid)
    {
        $wsfunction = "core_course_get_contents";

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'courseid' => $courseid,
        ])->object();

        return $response;
    }

    /**
     * Matricular estudiante al curso
     *
     * @param array $enrolments
     * enrolments[0][roleid]= int   *requerido
     * enrolments[0][userid]= int   *requerido
     * enrolments[0][courseid]= int *requerido
     * enrolments[0][timestart]= int
     * enrolments[0][timeend]= int
     * enrolments[0][suspend]= int
     * @return json
     */
    public function matricular($enrolments)
    {
        $wsfunction = 'enrol_manual_enrol_users';

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'enrolments' => $enrolments,
        ])->object();

        return $response;
    }

    /**
     * desmatricular
     *
     * @param array $enrolments
     * enrolments[0][userid]= int
     * enrolments[0][courseid]= int
     * enrolments[0][roleid]= int
     * @return json
     */
    public function desmatricular($enrolments)
    {
        $wsfunction = 'enrol_manual_unenrol_users';

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'enrolments' => $enrolments,
        ])->object();

        return $response;
    }

    public function crear_grupo($nombre){
        $functionname = 'core_group_create_groups';
        $consulta = $this->endpointService
        . '?wstoken=' . $this->token()->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&groups[0][courseid]=604'
        .'&groups[0][name]='.$nombre
        .'&groups[0][description]='.$nombre
        .'&groups[0][descriptionformat]=1';
        $c_grupo = Http::get($consulta);

        if(isset(json_decode($c_grupo)->exception))
        {
            return false;
        }
        else
        {
            return json_decode($c_grupo)[0]->id;
        }
    }

    public function eliminar_grupo($grupo_id){
        $functionname = 'core_group_delete_groups';
        $consulta = $this->endpointService
        . '?wstoken=' . $this->token()->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&groupids[0]='.$grupo_id;
        $c_grupo = Http::get($consulta);
    }

    public function matricular_grupo_estudiante($grupo_id, $user_id){
        $functionname = 'core_group_add_group_members';
        $consulta = $this->endpointService
        . '?wstoken=' . $this->token()->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&members[0][groupid]='.$grupo_id
        .'&members[0][userid]='.$user_id;
        $c_grupo = Http::get($consulta);
    }

    public function desmatricular_grupo_estudiante($grupo_id, $user_id){
        $functionname = 'core_group_delete_group_members';
        $consulta = $this->endpointService
        . '?wstoken=' . $this->token()->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&members[0][groupid]='.$grupo_id
        .'&members[0][userid]='.$user_id;
        $c_grupo = Http::get($consulta);
    }
}
