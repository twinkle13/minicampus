
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Online Code Compiler</title>
    <link rel='stylesheet' href='style.css' type='text/css' />
</head>

<body><center>


    <div id="wrapper">
        <h1><a href="process.php">Online Code Compiler</a></h1>
        <form id="code" action="editor.php" method="post">
            <div>
                <label for="lang">Select Language:</label>
                <select name="lang" id="lang" class="span6">
                    <option value="1">C</option>
                    <option value="13">Clojure</option>
                    <option value="2">C++</option>
                    <option value="9">C#</option>
                    <option value="16">Erlang</option>
                    <option value="21">Go</option>
                    <option value="12">Haskell</option>
                    <option value="3" selected="selected">Java</option>
                    <option value="18">Lua</option>
                    <option value="6">Perl</option>
                    <option value="7" >PHP</option>
                    <option value="5">Python 2</option>
                    <option value="8">Ruby</option>
                    <option value="15">Scala</option>
                    <option value="10">MySQL</option>
                    <option value="11">Oracle</option>
              
                </select>
            </div>
            
            <div>
                <label for="source">Source Code:</label>
                <textarea class="span6" cols="40" rows="10" name="source" id="source" placeholder="Paste/Type Code Here"><?php echo $_POST['source']?></textarea>
            </div>
            
            <div>
                <label for="input">Input: <span class="description">Input Test Cases Here</span></label>
                <textarea class="span6" cols="40" rows="3" name="input" id="input"></textarea>
            </div>

            <div>
                <input type="submit" name="submit" class="btn btn-success btn-large" value="Submit" />
            </div>
            
        </form>
        
      
        
        <div id="response">
            <div class="meta"></div>
            <div class="output"></div>
        </div>
        
        
    </div>
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="script.js"></script></center></body>
</html>

