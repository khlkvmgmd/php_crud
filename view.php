<?php
include"login.check.php";
include"dbconnect.php";

include "header.php";
?>        
    <table width="900" border="1" align="center" cellpadding="5" cellspacing ="3" bordercolor="#CC6600">
    <tr> 
    <td><strong>Имя пользователя</strong></td>
     <td><strong>Баланс</strong></td>
    <td><strong>Пароль</strong></td> 
    <td><strong>Телефон</strong></td>
    <td><strong>Пол</strong></td>
    <td><strong>Дата</strong></td>
    
    <td><strong>Ввести баланс</strong></td>
    <td><strong>История</strong></td>
    <td><strong>Редактирование</strong></td>
     
     <td><strong>Удалить</strong></td>
    
  </tr>
  
<?php
   $result=  query("select * from usercredential");
  while($row= mysqli_fetch_object($result))
  {
  $username         = $row->username;
  $balance          = $row->balance;
  
  $password         = $row->password;
  $phone            = $row->phone;
  $gender           = $row->gender;
  $date             = $row->sdate;
  $id				= $row->id;
  
  
  echo"
  
  <tr>
    <td>$username</td>
    <td>$balance</td>        
    <td>$password</td>
    <td>$phone</td>
    <td>$gender</td>
    <td>$date</td>
	<td><a href='add_balance.php?id=$id'>Ввести баланс</a></td>        			
	<td><a href='statement.php?userid=$id'>История</a></td>        				
	<td><a href='edit.php?id=$id'>Редактирование</a></td>        	
	<td><a href='action.php?action=deleteUser&id=$id'>Удалить</a></td>
	
  </tr>
  ";
  }
  
  ?>  
        </table>
     
        
    
<?php include"footer.php";?>
