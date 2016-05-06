# Dota2 Kits

## Live URL
<http://p4.yingtian.me>

## Youtube Demo 
<https://youtu.be/Cl1ZWbBbJsM>

## Description
Dota2 is a popular MOBA(Multiplayer online battle arena) game (https://en.wikipedia.org/wiki/Dota_2). The game has 111 heroes and 150 items with unique abilities. With the complexity of those combinations, it can be intimidating for beginner players. This application is designed to help with that.  The application provides detailed information about every heroes and items. 
For authenticated user,  it allows the user to create, save, edit and delete combinations of hero and items(the combination is called build). Each build has one hero and exactly six items (this is the rule from the game Dota2).

## Usage
1. To navigate hero or item: find the hero or item picture. Hover over or click the picture to get detail information.

2. After register and log in, you can create read update and delete a build.

3. To create a build, Drop one hero in the hero droppable area.
   6 items in items droppable area. Submit.

4. click "see you builds" to find all the builds you created.

5. click "show build detail" to see the build detail. 

6. To edit, drag the item from the items section and drop it at the item you want to replace.

7. To delete a build, click delete button.

## Details for teaching team
+ The application using Dota2 API to get hundres of photos, so it can take a little longer to load depends on your internet speed.
+ All form is submitted as draggable pictures.
+ For create build form, I provide javascript validation, so only one hero and six items can be submitted. For the server-side validation, I use regular expression to validate the form.


## Outside code and references
* User authentication: Built in Laravel user authentication code.

* Bootstrap: <http://getbootstrap.com/>

* Accept only the latest dropped draggable in a droppable
<http://www.macaalay.com/2013/11/15/accept-only-the-latest-dropped-draggable-in-a-droppable-interaction-using-jquery-ui/>

* How to show two different view  based on if user logged in for the same URI  
<http://stackoverflow.com/questions/18048105/laravel-4-two-different-view-pages-for-a-single-uri-based-on-auth-status>

* Beautiful CSS Typography Design  
<https://wdexplorer.com/20-examples-beautiful-css-typography-design/>

* Special link effects  
<http://tympanus.net/codrops/2013/08/06/creative-link-effects/>