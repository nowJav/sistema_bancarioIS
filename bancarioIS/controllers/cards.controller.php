<?php

class CardsController{

	/*=============================================
	Creación Tarjeta
	=============================================*/	

	public function create(){

		if(isset($_POST["name-card"])){

			echo '<script>

				matPreloader("on");
				fncSweetAlert("loading", "Loading...", "");

			</script>';

			/*=============================================
			Validamos la sintaxis de los campos
			=============================================*/		

			if(preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["name-card"] )){


				if(isset($_FILES["image-card"]["tmp_name"]) && !empty($_FILES["image-card"]["tmp_name"])){	

					$fields = array(
					
						"file"=>$_FILES["image-card"]["tmp_name"],
						"type"=>$_FILES["image-card"]["type"],
						"folder"=>"cards",
						"name"=>$_POST["url-name_card"],
						"width"=>170,
						"height"=>170
					);

					$saveImagecard = CurlController::requestFile($fields);

				}else{

					echo '<script>

						fncFormatInputs();
						matPreloader("off");
						fncSweetAlert("close", "", "");
						fncNotie(3, "Field image error");

					</script>';

					return;
				}

			   	/*=============================================
				Agrupamos la información 
				=============================================*/		

				$data = array(
				
					"user_id_card" => trim(TemplateController::capitalize($_POST["name-card"])),
					"card_number_card" => trim($_POST["cardnumber-card"]),
					"expiration_date_card" => date("Y-m-d"),
                    "cvv_card" => trim($_POST["cvv-card"]),
                    "credit_limit_card" => trim($_POST["creditlimit-card"]),
                    "available_card" => trim($_POST["available-card"]),
                    "balance_card" => trim($_POST["balance-card"]),
					"created_at_card" => date("Y-m-d")

				);

				/*=============================================
				Solicitud a la API
				=============================================*/		

				$url = "cards?token=".$_SESSION["admin"]->token_user."&table=users&suffix=user";
				$method = "POST";
				$fields = $data;

				$response = CurlController::request($url,$method,$fields);

				/*=============================================
				Respuesta de la API
				=============================================*/		
				
				if($response->status == 200){

						echo '<script>

							fncFormatInputs();
							matPreloader("off");
							fncSweetAlert("close", "", "");
							fncSweetAlert("success", "Your records were created successfully", "/cards");

						</script>';


				}else{

					echo '<script>

						fncFormatInputs();
						matPreloader("off");
						fncSweetAlert("close", "", "");
						fncNotie(3, "Error saving cards");

					</script>';

				}
		

			}else{

				echo '<script>

					fncFormatInputs();
					matPreloader("off");
					fncSweetAlert("close", "", "");
					fncNotie(3, "Field syntax error");

				</script>';

				
			}
		}

	}

	/*=============================================
	Edición Categoria Modulos
	=============================================*/	

	public function edit($id){

		if(isset($_POST["idcard"])){

			echo '<script>

				matPreloader("on");
				fncSweetAlert("loading", "Loading...", "");

			</script>';

			if($id == $_POST["idcard"]){

				$select = "image_card";

				$url = "cards?select=".$select."&linkTo=id_card&equalTo=".$id;
				$method = "GET";
				$fields = array();

				$response = CurlController::request($url,$method,$fields);

				if($response->status == 200){

					/*=============================================
					Validamos la sintaxis de los campos
					=============================================*/		
					if(preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["name-card"] )){

						/*=============================================
						Validar cambio imagen
						=============================================*/	

						if(isset($_FILES["image-card"]["tmp_name"]) && !empty($_FILES["image-card"]["tmp_name"])){		
								$fields = array(
								
									"file"=>$_FILES["image-card"]["tmp_name"],
									"type"=>$_FILES["image-card"]["type"],
									"folder"=>"cards",
									"name"=>$_POST["url-name_card"],
									"width"=>170,
									"height"=>170
								);

								$saveImagecard = CurlController::requestFile($fields);

						}else{

							$saveImagecard = $response->results[0]->image_card;

						}

					   	/*=============================================
						Agrupamos la información 
						=============================================*/	

						$data = "name_card=".trim(TemplateController::capitalize($_POST["name-card"])).
						"&url_card=".trim($_POST["url-name_card"]).
						"&image_card=".$saveImagecard;


						/*=============================================
						Solicitud a la API
						=============================================*/		

						$url = "cards?id=".$id."&nameId=id_card&token=".
						$_SESSION["admin"]->token_user."&table=users&suffix=user";
						$method = "PUT";
						$fields = $data;

						$response = CurlController::request($url,$method,$fields);

						/*=============================================
						Respuesta de la API
						=============================================*/		
						
						if($response->status == 200){		

							echo '<script>

								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("close", "", "");
								fncSweetAlert("success", "Your records were created successfully", "/cards");

							</script>';
	
						}else{

							echo '<script>

								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("close", "", "");
								fncNotie(3, "Error editing the registry");

							</script>';
							
						}

					}else{

						echo '<script>

							fncFormatInputs();
							matPreloader("off");
							fncSweetAlert("close", "", "");
							fncNotie(3, "Field syntax error");

						</script>';
						
					}

				}else{

					echo '<script>

						fncFormatInputs();
						matPreloader("off");
						fncSweetAlert("close", "", "");
						fncNotie(3, "Error editing the registry");

					</script>';

					
				}

			}else{

				echo '<script>

					fncFormatInputs();
					matPreloader("off");
					fncSweetAlert("close", "", "");
					fncNotie(3, "Error editing the registry");

				</script>';

				
			}
		}

	}

}