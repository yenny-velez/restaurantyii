<?php

use Phalcon\Mvc\User\Component;


class Elements extends Component
{
	private $_menu = array(
			array(
				'caption'=>'Home',
				'controller'=>'index',
				'class' => '',
				'action'=>'index',
				'url'=>'/home',
				'classSubmenu' => '',
				'subitem' =>array()
			),
			array(
				'caption'=>'Menu',
				'controller'=>'menu',
				'class' => 'has-submenu',
				'classSubmenu' => 'submenu',
				'action'=>'comida_rapida',
				'url' => '',
				'subitem' =>array(
					array(
					'caption'=>'Nuestra historia',
					'controller' =>'nosotros',
					'action'=>'nuestra_historia',
					'url' => 'nuestra-historia'
				
					),
					array(
					'caption'=>'El equipo',
					'controller' =>'nosotros',
					'action'=>'nuestra_historia#equipo',
					'url' => 'nuestra-historia#equipo'
					)
				)				
			),
			array(
				'caption'=>'Ubicación',
				'controller'=>'ubicacion',
				'class' => 'has-submenu',
				'action'=>'ubicacion',
				'classSubmenu' => 'submenu',
				'url' => ''
			),

			array(
				'caption'=>'Blog',
				'controller'=>'prensa',
				'class' => '',
				'action'=>'prensa',
				'classSubmenu' => '',
				'url' => 'prensa',
				'subitem'=>array()	
			),

			array(
				'caption'=>'Reservas',
				'controller'=>'trabaja',
				'class' => '',
				'action'=>'trabaja_nosotros',
				'classSubmenu' => '',
				'url' => 'trabaja-con-nosotros',
				'subitem' =>array()
			),

			array(
				'caption'=>'Cheff',
				'controller'=>'trabaja',
				'class' => '',
				'action'=>'trabaja_nosotros',
				'classSubmenu' => '',
				'url' => 'trabaja-con-nosotros',
				'subitem' =>array()
			),

			array(
				'caption'=>'Noticias',
				'controller'=>'trabaja',
				'class' => '',
				'action'=>'trabaja_nosotros',
				'classSubmenu' => '',
				'url' => 'trabaja-con-nosotros',
				'subitem' =>array()
			),

			array(
				'caption'=>'Galeria',
				'controller'=>'trabaja',
				'class' => '',
				'action'=>'trabaja_nosotros',
				'classSubmenu' => '',
				'url' => 'trabaja-con-nosotros',
				'subitem' =>array()
			),
		);

    public function getMenu()
    {
    	$controllerName = $this->view->getControllerName();
    	echo ' <ul class="navigation-menu">';
	    	foreach ($this->_menu as $key =>$item_menu) {
		        	if($item_menu['class']!= null){
	    				$url =$item_menu['url'];
						echo '<li class="' . $item_menu['class'] . '">';
							echo '<a href="#">' .$item_menu['caption']. '</a>';
		        			echo '<ul class="' . $item_menu['classSubmenu'] . '">';
		        				echo '<li class="' . $item_menu['class'] . '">';
		        						echo '<ul class="submenu"> </ul>';
		        					echo'</li>';
		        			foreach($item_menu['subitem'] as $key=>$item){
		        					$url = isset($item['url'])==true? $item['url'] : $item['controller'] .'/' . $item['action'];
		        					echo '<li>';
		        						echo' <a href="' . $this->url->get($url) . '">' .$item['caption']. '</a>';
		        					echo '</li>';
		        			}
		        			echo '</ul>';
		        	}else{
		        		echo '<li class="' . $item_menu['class'] . '">';
		        			$url = isset($item_menu['url'])==true? $item_menu['url'] : $item_menu['controller'] .'/' . $item_menu['action'];
		        			echo '<a href="' . $this->url->get($url) . '">' .$item_menu['caption']. '</a>';
		        		echo '</li>';
		        	}
	    	}
    	echo '</ul>';
    }

    public function getTabs()
    {
        // ...
    }
}