<?php

class Convenios extends CI_Model {
        public $sector;
        public $tipoconvenio;
        public $gradoacademico;
        public $ciclo;
        public $carrera;
        public $institucioneducativa;
        public $vigencia;
        public $delegacion;

        public function get_entries()
        {
                $query = $this->db->get('convenio');
                return $query->result();
        }

        public function insert_entry($data)
        {
                $this->sector = $data['sector'];
                $this->tipoconvenio = $data['tipoconvenio'];
                $this->gradoacademico = $data['grado'];
                $this->ciclo = $data['ciclo'];
                $this->carrera = $data['carrera'];
                $this->institucioneducativa = $data['institucion'];
                $this->vigencia = $data['vigencia'];
                $this->delegacion = $data['delegacion'];

                $this->db->insert('convenio', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

        public function delete($id){
                $this->db->delete('convenio', array('idconvenio' => $id));
        }

}
?>