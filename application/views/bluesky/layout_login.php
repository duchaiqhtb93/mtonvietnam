			<?php
                $menu=array();
                $menucon=array();
                $menu=$menucon=null;
                $data['menu']=$menu;
                $data['menucon']=$menucon;
                $data['url']=base_url();
				$this->parser->parse($template,$data);
			?>