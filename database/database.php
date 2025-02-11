<?php
require './manager/manager.php';

Class Database {

    public function initDatabase() {
    
        $portfolio_db = "CREATE DATABASE IF NOT EXISTS veljkokveljkolcs";
        makeSqlRequest($portfolio_db, false, false);
    
        $create_table_admin = "CREATE TABLE IF NOT EXISTS admin (
            `id` CHAR(36) PRIMARY KEY,
            `email` VARCHAR(150) NOT NULL UNIQUE,
            `password` VARCHAR(100) NOT NULL
        );";
        makeSqlRequest($create_table_admin, true, false);
    
        
        $create_table_user = "CREATE TABLE IF NOT EXISTS user (
            `id` CHAR(36) PRIMARY KEY,
            `name` VARCHAR(100) NOT NULL,
            `email` VARCHAR(150) NOT NULL UNIQUE
        );";
        makeSqlRequest($create_table_user, true, false);
    
        
        $create_table_message = "CREATE TABLE IF NOT EXISTS message (
            `id` CHAR(36) PRIMARY KEY,
            `user_id` CHAR(36) NOT NULL,
            `message` VARCHAR(500) NOT NULL,
            `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP, 
            `replied` BOOLEAN DEFAULT FALSE,
            FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
        );";
        makeSqlRequest($create_table_message, true, false);
    
        
        $create_table_project = "CREATE TABLE IF NOT EXISTS project (
            `id` CHAR(36) PRIMARY KEY,
            `title` VARCHAR(100) NOT NULL,
            `description` VARCHAR(500) NOT NULL
        );";
        makeSqlRequest($create_table_project, true, false);
    
        
        $create_table_technology = "CREATE TABLE IF NOT EXISTS technology (
            `id` CHAR(36) PRIMARY KEY,
            `project_id` CHAR(36) NOT NULL,
            `technology_name` VARCHAR(100) NOT NULL,
            FOREIGN KEY (project_id) REFERENCES project(id) ON DELETE CASCADE ON UPDATE CASCADE
        );";
        makeSqlRequest($create_table_technology, true, false);
    
        
    }


}

