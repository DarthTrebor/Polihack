<template>

</template>

<script>
import axios from 'axios';

export default {
    props: {
        user: Object
    },
    methods: {
        startActivity() {
            const self = this;
            setInterval(function() {
                axios.get('/api/newActivity/' + self.user.id, {
                })
            }, 5000)
        }
    },
    mounted() {
        this.startActivity()
    }
}
</script>
