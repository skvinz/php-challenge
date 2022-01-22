<?php

namespace App\Services;

use App\Contact;


		
		$ip = "192.168.1.1";

		
//COMANDO PARA VALIDAR COSAS// POR FALTA DE TIEMPO 
		if (filter_var($ip, FILTER_VALIDATE_IP)){
			echo "<p> Direccion IP VALIDA</p>";
		}
				else {
					echo "<p> IP NO VALIDA</p>";
				}
	