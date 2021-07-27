<?php
    $Page = "Navigation";
    $Path = "../";
    include $path.'assets/inc/nav.php'
?>
    
    <body>
        <h1>Navigation</h1>
        <div><h3>Heirarchy</h3>
            <p>Sibling directories exist in the same directory
                Parent directories have other directories inside of them
                Child directories are inside of a parent directory</p>
        </div>
        <div>
            <h3>Absolute Path</h3>
            <p>Starts with “/”
                Unless the desired location is in the current working directory, you must start with “/home”, and work down.
                “/” separates every directory/file</p>
        </div>
        <div>
            <h3>Relative Path</h3>
            <p>Parent to child: cd DirectoryName
                Child to parent: cd ..
                Sibling to sibling: cd ../DirectoryName
                To home directory: ~ or cd
                Use pwd (print working directory) to show where you are</p>
        </div>
        <div>
            <h3>Commands</h3>
            <ul>
                <li>cd: change directory</li>
                <li>mkdir pathname: creates a new, empty directory at the given point</li>
                <li>rm pathname: removes non-empty directory</li>
                <li>rmdir pathname: removes empty directory</li>
                <li>ls pathname: lists contents of the given directory</li>
            </ul>
        </div>




    </body>
