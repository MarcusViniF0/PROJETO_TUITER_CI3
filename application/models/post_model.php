<?php
class Post_model extends CI_model{
    public $id;
    public $msg;
    public $datahora;

    public function __construct(){
        parent::__construct();
    }
    public function inserir(){
        $dados=array("msg"=>$this->msg);
        return $this->db->insert('post',$dados);
    }
    public function recuperar(){
        $this->db->order_by('datahora','asc');
        $query=$this->db->get('post');
        return $query->result();
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('post');
    }
    public function recuperarUm($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('post');
        return $query->row();
    }
    public function update(){
        $this->db->set('msg',$this->msg);
        $this->db->where('id',$this->id);
        $this->db->update('post');
    }
    public function armazenar($nome,$login,$senha){
        $sql="INSERT INTO usuario(nome,login,senha)value(?,?,?)";
        $dados=array($nome,$login,$senha);
        $this->db->query($sql,$dados);

        echo "Dados inseridos com sucesso!";
    }
    public function recuperarPorLoginESenha($login,$senha){
        $sql="SELECT*FROM usuario where login=? and senha=?";
        $dados=array($login,$senha);
        return $this->db->query($sql,$dados)->result();
    }
}