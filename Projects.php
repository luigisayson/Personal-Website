<!DOCTYPE html>
<html lang="en-us">
    <?php include("header.html");?>
    <?php include("navigation.html");?>
    <body>
        <div class="container">
            <ul class="project-list">
                <li class="project">
                    <div class="project-name">Virtual Machine System</div>
                    <div class="project-description"> 
                        <ul>
                            <li>Simulated a virtual machine in Java using segmentation and paging</li>
                            <li>Accepts virtual addresses and translates them into physical addresses</li>
                            <li>Implemented a translation look-aside buffer to make the translation process more efficient</li>
                            <li>Code available upon request</li>
                        </ul>
                    </div>
                </li>
                <li class="project">
                    <div class="project-name">Navigation Program</div>
                    <div class="project-description"> 
                        <ul>
                            <li>Developed navigation program using Python that allows users to search and print out step by step directions from MapQuest.</li>
                            <li>Utilized MapQuest API to retrieve JSON file to extract directions.</li>
                        </ul>
                    </div>
                </li>
                <li class="project">
                    <div class="project-name">DevMatch</div>
                    <div class="project-description"> 
                        <ul>    
                            <li>Created mock e-commerce website deployed on Heroku that connects software developers and entrepreneurs</li>
                            <li>Offers registered users basic and premium membership subscriptions for their accounts </li>
                            <li>Built using front-end and back-end techniques using Ruby on Rails, HTML, CSS (Bootstrap library), and JavaScript. </li>
                            <li>Project link: <a href="https://ancient-crag-91578.herokuapp.com">https://ancient-crag-91578.herokuapp.com</a></li>
                        </ul>
                    </div>
                </li>
                <li class="project">
                    <div class="project-name">Sudoku Solver</div>
                    <div class="project-description"> 
                        <ul>
                            <li>Implemented AI techniques such as constraint propagation and forward checking to speed up the solving process</li>
                            <li>Works for Sudoku puzzles of any size</li>
                        </ul>
                    </div>
                </li>
                <li class="project">
                    <div class="project-name">Othello</div>
                    <div class="project-description"> 
                        <ul>
                            <li>Programmed the game Othello along with a GUI using Tkinter widgets in Python.</li>
                            <li>User can choose the dimensions of the board, with a minimum of a 4 by 4 board and a maximum of 16 by 16.</li>
                            <li>The program determines once the game is either won or drawn, and outputs a message</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <?php include("footer.html");?>
    </body>
</html>