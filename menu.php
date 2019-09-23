	
			
				<?php
					$menu=[
						["name"=>"menu", "link"=>"/", "children" =>[]
			],
		["name"=>"contact ", "link"=>"/?page=contact", "children" =>[]
			],
		["name"=>" about", "link"=>"/?page=about",
			"children" =>[
				["name"=>" history ", "link"=>"/?page=histori", "children" =>[
					["name"=>" about company ","link"=>"/?page=about_compani", "children" =>[]
						],
					["name"=>" history another ","link"=>"/?page=another", "children" =>[]
						],
					],
				],
					["name"=>" web link ", "link"=>"/?page=weblink", "children" =>[]
						],
					["name"=>" address ", "link"=>"/?page=address", "children" =>[]
						],
			],
		],	
		["name"=>"  gallery ", "link"=>"/?page=gallery", "children" =>[]
			],
				];

				
	


			function printmenu($array) {
					if (!is_array($array)) {
						return "";
					}
					$bildmenu="";
					foreach ($array as $key => $value) {
						$bildmenu .="<li><a href=".$value["link"].">".$value["name"]."<ul>".printmenu($value["children"])."</a></ul></li>";
					}
					return $bildmenu;
					
				}
				echo "<ul >";
				$menuhtml=printmenu($menu);
				echo "</ul>";
				echo $menuhtml;
				echo "<br>";
				

			
		
			$page = $_GET['page'];
			if(file_exists('./'.$page . '.php')) {
				include('./'.$page . '.php');
			} else if(!strlen($page)) {
				echo 'Home Page';
			} else {
				echo '404';
			}
				
			?>
		
		


		
			
		