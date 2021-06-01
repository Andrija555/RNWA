
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fiber Optics</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <input type="checkbox" id="menu">
<div class="wrapper">
    <div class="menu-min">
            
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars" aria-hidden="true" ></i>
        </label>
    
    </div>
  
    <div class="sidebar">
        <h2>Fiber Optics</h2>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href='index.php?controller=buildings&action=index'><i class="fas fa-tasks"></i><span>Zgrade</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 2</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 3</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>
    <div class="main_content">
        
	
  
	<div class="header">Detalji o zgradi</div>
  
  <table class="table" >
			
			<thead>
			  <th>Building UID</th>
			  <th>Names</th>
			  <th>Notes</th>
			   <th>Broj</th>
			 <th>Level</th>
           
			 
			</thead>
			<tbody> 
			<tbody>
			<tr>
			  <td data-label='Building UID'><?php echo $building->building_UID ?></td>
			  <td data-label='Name'><?php echo $building->name ?></td>
			  <td data-label='Notes'><?php echo $building->notes ?></td>
			 <td data-label='Number'><?php echo $building->number ?></td>
			  <td data-label='Levels'><?php echo $building->levels ?></td>
			 
			</tr>
			
			</tbody>
			
			  </table>
	</div>
	</div>
	</body>
</html>