<?php
session_start();
//session_destroy();

class Html_helper 
{
	public function print_table($table_data = NULL) 
	{
		if($table_data != NULL)	
		{
			$error_count = 0;
			$table_header = NULL;
			$table_content = NULL;

			foreach($table_data as $key => $value)
			{
				if(trim($value) == NULL)
				{
					$error_count++;
				}
				else
				{
					$key = ucwords(str_replace("_", " ", $key));
					$table_header .= '<td>'. $key .'</td>';
					$table_content .= '<td>'. $value .'</td>';
				}
			}

			if($error_count == 0)
			{
				return '<table id="generated_table">
							<thead>
								<tr id="table_header">'. $table_header .'</tr>
							</thead>
							<tbody>
								<tr id="table_content">'. $table_content .'</tr>
							</tbody>
						</table>';	
			}
			else
			{
				return '<h3 class="error">All fields are required</h3>';
			}
		}
	}

	public function print_select($select_option = NULL) 
	{	
		$generated_list = NULL;
		
		if($select_option != NULL)
		{
			$_SESSION['list_options'][] =  $select_option['list_option'];
			
			foreach($_SESSION['list_options'] as $list_option)
			{
				$generated_list .= '<option value="">'. $list_option .'</option>';
			}
			
			return '<select name="select_options">'. $generated_list .'</select>';
		}
		else
		{
			return '<h3 class="error">Please add a valid list option</h3>';
		}
	}
}
?>