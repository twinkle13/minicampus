
<?php  require('connection.php');  
$mongo = DBConnection::instantiate();  
$collection = $mongo->getCollection('assignments');  
$notices = array(       
               array(
                      
                  'groupid'=> 'ai_b1b2',      
                  'assignment_heading'=> 'assignment of 1',
                  'content'=>'jhgk jk kjh kljh kjlh hjk hkn ilkjn gkj kj ',
                  'date'=>new MongoDate()
                  ),
               
                  array(
                        
                  'groupid'=> 'cn_b1b2', 
                         
                  'assignment_heading'=> 'assignment of 2',
                  'content'=>'jhgk jk kjh kljh kjlh hjk hkn ilkjn gkj kj ',
                  'date'=>new MongoDate()

                  ),
                   array(
                       
                  'groupid'=> 'osl_b2',
                          
                  'assignment_heading'=> 'assignment of 3',
                  'content'=>'jhgk jk kjh kljh kjlh hjk hkn ilkjn gkj kj ',
                  'date'=>new MongoDate()


                  ),
                  array(
                       
                  'groupid'=> 'ai_b1b2',
                          
                  'assignment_heading'=> 'assignment of 4',
                  'content'=>'jhgk jk kjh kljh kjlh hjk hkn ilkjn gkj kj ',
                  'date'=>new MongoDate()


                  ),
        
         );         

foreach($notices as $notice)
  {
    try{
        $collection->insert($notice);
      } 
      catch (MongoCursorException $e) {
                                        die($e->getMessage());
                                      }
  }
  echo 'notices created successfully';



