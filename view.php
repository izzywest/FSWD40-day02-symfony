<!DOCTYPE html>
<html>
 <head>
   <title>List of Media</title>
   <meta charset="UTF-8"> 

 </head>
 <body>
   <h1>List of Media</h1>
   <table>
     <tr><th>Title</th><th>Description</th></tr>
   <?php foreach ($medias as $media): ?>
     <tr>
       <td><?php echo $media['title'] ?></td>
       <td><?php echo $media['description'] ?></td>
     </tr>
   <?php endforeach; ?>
   </table>
 </body>
</html>