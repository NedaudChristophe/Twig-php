
<?php


class data {

    public function getData(){
        $data_url = 'http://api.randomuser.me/?results=3';
        $data_contenu = file_get_contents($data_url);
        $data_array = json_decode($data_contenu, true);
        $utilisateurs = $data_array['results'];
        return $utilisateurs;
    }

}
