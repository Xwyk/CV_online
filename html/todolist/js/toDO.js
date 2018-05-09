$( document ).ready(function(){
    $( function() {
            $( "#datepicker1" ).datepicker();
          } );
    $( function() {
            $( "#datepicker2" ).datepicker();
          } );
    $( function() {
        $( "#datepicker3" ).datepicker();
    } );
    $( function() {
        $( "#datepicker4" ).datepicker();
    } );
    $(".button-collapse").sideNav();

})
var searched = false;
var module = angular.module("ToDo", []);
module.controller("ctrl", TodoCtrl);
function TodoCtrl($scope) {
  
  $scope.todos = [{}];
  
  
  $scope.getTotalTodos = function () {
    if(!searched){
        $scope.getTodos();
        $scope.affCachClearButt();
        searched = true;
    }
    if ($scope.todos === null) {
        $scope.todos = [];
    }
    return ($scope.todos.length==1)?$scope.todos.length+" chose": $scope.todos.length+" choses";
  };
    
  $scope.addTodo = function () {
        PurePopup.prompt({
            title: 'Nouvelle tâche : ',
            buttons: {
                okButton: 'Confirmer',
                cancelButton: 'Annuler'
            },
            inputs: {
                titre: 'Titre : ',
                description: 'Description : ',
                date: 'Date : ',
                duree: 'Durée : ',
                contexte: 'Contexte : '
            },
            ids: {
                titre: ' ',
                description: ' ',
                date: 'datepicker5',
                duree: 'datepicker6',
                contexte: ' '
            },
            values: {
                titre: '',
                description: '',
                date: '',
                duree: '',
                contexte: ''
            }}, function(result) {
                if (result.confirm == 'okButton') {
                    $scope.todos.push({id: $scope.todos.length+1,titre: result.titre, description: result.description, date: result.date, duree: result.duree, contexte: result.contexte, done:false});
                    $scope.saveTodos();
                    $scope.$apply();
                   
                }
            }
        );
        
    };
  
    $scope.clearCompleted = function () {
        $scope.todos = _.filter($scope.todos, function(todo){
            return !todo.done;
        });
        $scope.saveTodos();
    };
    $scope.removeTodo = function(todoToRemove){
        for (var i = $scope.todos.indexOf(todoToRemove); i < $scope.todos.length-1; i++) {
            $scope.todos[i]=$scope.todos[i+1];
        }
        $scope.todos.pop();
        $scope.saveTodos();

    }
    $scope.editTodo = function (todoToEdit){
        PurePopup.prompt({
            title: 'Nouvelle tâche : ',
            buttons: {
                okButton: 'Confirmer',
                cancelButton: 'Annuler'
            },
            inputs: {
                titre: 'Titre :',
                description: 'Description :',
                date: 'Date :',
                duree: 'Durée :',
                contexte: 'Contexte :'
            },
            ids: {
                titre: ' ',
                description: ' ',
                date: 'datepicker5',
                duree: 'datepicker6',
                contexte: ' '
            },
            values: {
                titre: todoToEdit.titre,
                description: todoToEdit.description,
                date: todoToEdit.date+'',
                duree: todoToEdit.duree+'',
                contexte: todoToEdit.contexte
            }}, function(result) {
                todoToEdit.titre = result.titre;
                todoToEdit.description = result.description;
                todoToEdit.date = result.date;
                todoToEdit.duree = result.duree;
                todoToEdit.contexte = result.contexte;
                $scope.saveTodos();
                $scope.$apply();
            }
        );
    };

    $scope.affCachClearButt = function (){
        var tmpScope = _.filter($scope.todos, function(todo){
            return !todo.done;
        });;
        if ($scope.todos === null || $scope.todos.length != tmpScope.length) {
            document.getElementById('clear').style.visibility='visible';
        }else
            document.getElementById('clear').style.visibility='hidden';
    }

    $scope.infoTodo = function (todoToInfo){
        PurePopup.infoPrompt({
            title: todoToInfo.titre,
            buttons: {
                okButton: 'Contnuer'
            },
            inputs: {
                description: 'Description :',
                date: 'Date :',
                duree: 'Durée :',
                contexte: 'Contexte :'
            },
            values: {
                description: todoToInfo.description+"<br>",
                date: todoToInfo.date+"<br>",
                duree: todoToInfo.duree+"<br>",
                contexte: todoToInfo.contexte+"<br>"
            }}, function(result) {

            }
        );
    }
    $scope.saveTodos = function(){
        localStorage.clear();
        window.localStorage.setArray("todos", $scope.todos);
    }

    $scope.getTodos = function(){
        $scope.todos = window.localStorage.getArray("todos");;
     }
    Storage.prototype.setArray = function(key, obj) {
        return this.setItem(key, JSON.stringify(obj));
    }
    Storage.prototype.getArray = function(key) {
     return JSON.parse(this.getItem(key));
    }
}

