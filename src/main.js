import Vue from 'vue';

new Vue({
    el: '.vue-app',
    data: {
        counter: 0,
        message: [1,2,3],
        items: ['a', 'b', 'c'],
        isVisible: true,
        input: null,
        tasks: [
            {id: 1, title: 'task1', completed: true},
            {id: 2, title: 'task2', completed: false},
            {id: 3, title: 'task3', completed: false},
            {id: 4, title: 'task4', completed: true},
        ]
    },
    methods: {
        addCounter() {
            this.counter++;
        },
        addList(){
            this.tasks.push({
                id:0, title:this.input, completed: false
            })
            this.input = null;
        }
    },
    computed: {
        counterDouble() {
            return this.counter * 2;
        },
        unfinished(){
            return this.tasks.filter((item) => {
                return item.complted === false;
            })
        },

    }
});