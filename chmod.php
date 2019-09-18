<pre>
<?php
//read and write for owner,nothing for everybody else
chmod("/somedir/somefile",0600);

//read and write for owner,read for everybody else
chmod("/somedir/somefile",0644);

//everything for owner,read and execute for others
chmod("/somedir/somefile",0755);

    ?>