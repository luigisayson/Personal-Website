<!DOCTYPE html>
<html lang="en-us">
    <?php include("header.html");?>
    <?php include("navigation.html");?>
    <body>
        <div class="container">
            <div class="projects-description">
                <p>
                    These are some of the projects I've worked on as an undergrad at UCI. Feel free to click on any of the links to try them out.
                </p>
            </div>
            
            <ul class="project-list">
                <div class="row">
                    <div class="col">
                        <li class="project">
                            <div class="project-name">FabFlix</div>
                            <a href="http://35.227.78.26/FabFlix/" target="_blank"><img src="FabFlix_pic.png" height="300px" width="500px"></a>
                            <div class="project-description"> 
                                <ul>
                                    <p>
                                        FabFlix is a web application that simulates an online movie store. Users are able to search for movies, add them to a cart, and purchase them.
                                        On the front-end this project is implemented using html, css, bootstrap, javascript, and jQuery. Meanwhile, the back-end is implemented using Java servlets,
                                        which use JDBC to access data from a mysql database (with data provided by the professor). These files are deployed using Tomcat on an Amazon ec2 server.
                                    </p>
                                </ul>
                            </div>
                        </li>
                    </div>
                    <div class="col">
                        <li class="project">
                            <div class="project-name">DevMatch</div>
                           <a href="https://ancient-crag-91578.herokuapp.com"  target="_blank"><img src="DevMatch_pic.png"  height="300px" width="500px"></a>
                            <div class="project-description"> 
                                <ul>    
                                    <p> 
                                        This is a project I made by following along a free online course on <a href = "https://upskillcourses.com">upskillcourses</a>. 
                                        DevMatch is a mock e-commerce website that connects software developers and entrepreneurs. Clients can register for either a 
                                        basic or premium membership, the former allowing them only to see the names of people in the community, while the latter also 
                                        provides their contact information. The website is deployed using a Heroku server, and is built using Ruby on Rails, html, css, 
                                        bootstrap, and javascript. 
                                    </p>
                                </ul>

                            </div>
                        </li>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <li class="project">
                            <div class="project-name">Othello</div>
                            <div class="text-center"><a href="#"><img src="Othello_pic.png" height="300px" width="<3></3>00px"></a></div>
                            <div class="project-description"> 
                                <ul>This is a project I worked on during my freshman year. It's based on the game <a href="https://en.wikipedia.org/wiki/Reversi">Othello</a>, 
                                also known as "reversi." The board and all the moves made were implemented using a two dimensional list, while the GUI was made using Python's 
                                Tkinter library. </ul><br>
                                <ul>github link: <a href="#"> TO BE ADDED </a></ul>
                            </div>
                        </li>
                    </div>
                      <div class="col">
                        <li class="project">
                            <div class="project-name">Virtual Machine System</div>
                            <div class="text-center"><a href="#"><img src="Othello_pic.png" height="300px" width="<3></3>00px"></a></div>
                            <div class="project-description"> 
                                <ul>
                                    <li>Programmed the game Othello along with a GUI using Tkinter widgets in Python.</li>
                                    <li>User can choose the dimensions of the board, with a minimum of a 4 by 4 board and a maximum of 16 by 16.</li>
                                    <li>The program determines once the game is either won or drawn, and outputs a message</li>
                                </ul>
                            </div>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </body>
</html>