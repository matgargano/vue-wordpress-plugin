<template>

    <div>
        I am a parent<br>
        {{ variable }} is a variable<br>
        <a href="#" @click.prevent="changeVariable()">Change the variable</a><br>
        <vwp-child></vwp-child>
    </div>

</template>

<script>

    import Child from './Child.vue';

    export default {
        methods: {
            changeVariable(){
                this.variable = this.variable === 'I have been updated' ? 'this is a variable' : 'I have been updated'
            }
        },
        data: function(){
            return {
                variable: 'this is a variable'
            }
        },
        components: {
            'vwp-child': Child
        }
    }





</script>

<style>

</style>
