<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="vue-app">
    <p>{{ message }}</p>
    <input type="text" v-model="message">
    <li v-for="(item, index) in items">{{ item + ' - ' + index }}</li>
    <div v-if="isVisible">
        im visible
    </div>
    <div v-show="!input">
        Enter something
    </div>
    <form  v-on:submit.prevent>
        <input type="text" value="" v-model="input" @keydown="addCounter">
        <button  type="submit" v-show="input" @click="addList">
            Submit input form
        </button>
    </form>
    <div>
        {{counterDouble}}
    </div>
    <h2>Unfinished business</h2>
    <ul>
        <li v-for="item in tasks">
            <h2>{{item.id}}:{{item.title}}</h2>
        </li>
    </ul>
</div>
<script src="build/app.js"></script>
</body>
</html>