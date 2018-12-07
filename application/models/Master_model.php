<?php if( !defined('BASEPATH')) exit('No direct script access alloed');

class Master_model extends CI_Model
{
    
    
    public function getRecordCount($tbl_name,$condition=FALSE)
    {
        if($condition!="" && count((array)$condition)>0)
        {
            foreach($condition as $key=>$val)
            { $this->db->where($key,$val); }
        }
        $num=$this->db->count_all_results($tbl_name);
        return $num;
    }
    
    
    public function getRecords($tbl_name,$condition=FALSE,$select=FALSE,$order_by=FALSE,$start=FALSE,$limit=FALSE)
    {
        if($select!="")
        {$this->db->select($select);}
        
        if(count((array)$condition)>0 && $condition!="")
        { $condition=$condition; }
        else
        {$condition=array();}
        if(count((array)$order_by)>0 && $order_by!="")
        {
            foreach($order_by as $key=>$val)
            {$this->db->order_by($key,$val);}
        }
        if($limit!="" || $start!="")
        { $this->db->limit($limit,$start);}
        
        $rst=$this->db->get_where($tbl_name,$condition);
        return $rst->result_array();
    }
    
    public function insertRecord($tbl_name,$data_array,$insert_id=FALSE)
    {
        if($this->db->insert($tbl_name,$data_array))
        {
            if($insert_id==true)
            {return $this->db->insert_id();}
            else
            {return true;}
        }
        else
        {return false;}
    }
    
    public function updateRecord($tbl_name,$data_array,$where_arr)
    {
        $this->db->where($where_arr,NULL);
        if($this->db->update($tbl_name,$data_array))
        {return true;}
        else
        {return false;}
    }
    
    
    public function deleteRecord($tbl_name,$pri_col,$id)
    {
        $this->db->where($pri_col,$id);
        if($this->db->delete($tbl_name))
        {return true;}
        else
        {return false;}
    }

    public function getRandom($strlength)
    {
        $stringarray=array(0,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','g','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $str="";
        for($i=1;$i<=$strlength;$i++)
        {
            $str=$str.$stringarray[mt_rand(0,60)];
        }   
        return $str;
    }

    
}
?>