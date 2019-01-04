<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function getLastInserted($key, $namatabel, $keyreference, $delimiter)
    {
        $query1 = $this->db->query('SELECT ' . $key . ' FROM ' . $namatabel . ' WHERE ' . $keyreference . '="' . $delimiter . '" ORDER BY ' . $key . ' LIMIT 1');
        $result = $query1->row_array();
        return $result["$key"];
    }

    public function insert_data($namatabel, $data)
    {
        $data_formatted = [];

        foreach ($data as $key => $value) {
            array_push($data_formatted, "'$value'");
        }

        $query = $this->db->query('INSERT INTO ' . $namatabel . ' VALUES (' . implode(', ', $data_formatted) . ')');
        return $query;
    }

    public function update_data($namatabel, $data, $kondisi)
    {
        $condition_formatted = [];
        $data_formatted = [];

        foreach ($data as $key => $value) {
            array_push($data_formatted, "$key='$value'");
        }

        foreach ($kondisi as $key => $value) {
            array_push($condition_formatted, "$key='$value'");
        }

        $query = $this->db->query('UPDATE ' . $namatabel . ' SET ' . implode(', ', $data_formatted) . ' WHERE ' . implode(' AND ', $condition_formatted) . '');
        return $query;
    }

    public function select_data($namatabel)
    {
        $query = $this->db->query('SELECT * FROM ' . $namatabel);
        return $query;
    }

    public function select_data_column($namatabel, $column)
    {
        $column_formatted = [];

        foreach ($column as $key => $value) {
            array_push($column_formatted, "$value");
        }
        $query = $this->db->query('SELECT ' . implode(', ', $column_formatted) . ' FROM ' . $namatabel);
        return $query;
    }

    public function select_data_cond($namatabel, $condition)
    {
        $condition_formatted = [];

        foreach ($condition as $key => $value) {
            array_push($condition_formatted, "$key='$value'");
        }

        $query = $this->db->query('SELECT * FROM ' . $namatabel . ' WHERE ' . implode(' AND ', $condition_formatted));
        return $query;
    }

    public function select_data_column_cond($namatabel, $column, $condition)
    {
        $condition_formatted = [];
        $column_formatted = [];

        foreach ($condition as $key => $value) {
            array_push($condition_formatted, "$key='$value'");
        }

        foreach ($column as $key => $value) {
            array_push($column_formatted, "$value");
        }

        $query = $this->db->query('SELECT ' . implode(', ', $column_formatted) . ' FROM ' . $namatabel . ' WHERE ' . implode(' AND ', $condition_formatted));
        return $query;
    }

    public function select_data_column_cond_order($namatabel, $column, $condition, $order)
    {
        $condition_formatted = [];
        $column_formatted = [];

        foreach ($condition as $key => $value) {
            array_push($condition_formatted, "$key=$value");
        }

        foreach ($column as $key => $value) {
            array_push($column_formatted, "$value");
        }

        $query = $this->db->query('SELECT ' . implode(', ', $column_formatted) . ' FROM ' . $namatabel . ' WHERE ' . implode(' AND ', $condition_formatted) . ' ORDER BY ' . $order);
        return $query;
    }

    public function delete_data($namatabel, $condition)
    {
        $condition_formatted = [];

        foreach ($condition as $key => $value) {
            array_push($condition_formatted, "$key='$value'");
        }

        $query = $this->db->query('DELETE FROM ' . $namatabel . ' WHERE ' . implode(' AND ', $condition_formatted));
        return $query;
    }

    public function getAllColumnName($namatabel)
    {
        return $this->db->query('SHOW COLUMNS FROM ' . $namatabel);
    }
}
