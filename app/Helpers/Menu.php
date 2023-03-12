
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => "Home", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'notulensis',
			'label' => "Notulensis", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'users',
			'label' => "Users", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'izinkepegawaians',
			'label' => "Izinkepegawaians", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'statusizinkepegawaians',
			'label' => "Statusizinkepegawaians", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'Pinjambmns',
			'label' => "Peminjaman BMN", 
			'icon' => '<i class="material-icons ">devices_other</i>','submenu' => [
		[
			'path' => 'pinjambmns/ajukan_pinjam_bmn',
			'label' => "Ajukan", 
			'icon' => '<i class="material-icons ">near_me</i>'
		],
		
		[
			'path' => 'pinjambmns/list_proses_pengambilan_bmn',
			'label' => "Pengambilan", 
			'icon' => '<i class="material-icons ">shopping_cart</i>'
		],
		
		[
			'path' => 'pinjambmns',
			'label' => "Daftar Peminjaman", 
			'icon' => '<i class="material-icons ">format_list_bulleted</i>'
		]
	]
		],
		
		[
			'path' => 'penugasans',
			'label' => "Penugasans", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'statuspinjambmns',
			'label' => "Statuspinjambmns", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'komponens',
			'label' => "Komponens", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'kegiatans',
			'label' => "Kegiatans", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'programs',
			'label' => "Programs", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'akuns',
			'label' => "Akuns", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'outputs',
			'label' => "Outputs", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'suboutputs',
			'label' => "Suboutputs", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'subkomponens',
			'label' => "Subkomponens", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'realisasis',
			'label' => "Realisasis", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'roles',
			'label' => "Roles", 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'permissions',
			'label' => "Permissions", 
			'icon' => '<i class="material-icons">extension</i>'
		]
	] ;
	}
	
		
	}
