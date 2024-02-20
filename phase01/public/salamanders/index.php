<!-- require initialize.php -->


<!-- 
  Write a salamanders array with the following
id=1, salamanderName = Red-Legged Salamander
id=2, salamanderName = Pigeon Mountain Salamander
id=3', salamanderName = ZigZag Salamander
id=4,  salamanderName= Slimy Salamander 
-->



<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->

?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><a href="#">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<!-- <?php add the shared path to the salamander footer ?> -->
