<?php
	public class newArticle
	{
		/* On se connecte à la base */
		private $_connect = null;
		private $_pass = "";
		private $_user = "root";
		private $_type = "mysql";
		private $_path = "127.0.0.1";
		
		/* Ouverture du constructeur */
		public __construct()
		{
			$const->_connect = new PDO($const->_type . ":" . $const->_path,$const->_user, const->_pass);
		}
		
		/* Ajout d'un article */
		public AddArticle(){
			$const->_connect->query("Select * FROM `articles`");
			
			return $const->_connect->fetchAll();
		}
	}