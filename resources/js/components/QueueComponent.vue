<template>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 v-if="currentPosition !== 1">Esti pe locul #{{ currentPosition }}</h4>
                </div>
                <div class="text-center" v-if="currentPosition === 1">
                    <h4>Asteptarea a luat sfarsit!</h4>
                    <button class="btn btn-success">Intra in camera!</button>
                    <div class="mt-10">
                        <h3 v-if="timer" class="mt-4">{{ timer }}</h3>
                        <h4 class="text-danger">Daca nu te conectezi la timp, vei pierde randul la coada!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';

export default {
    props: {
        user: Object
    },
    data() {
        return {
            currentPosition : null,
            timer: null
        }
    },
    methods: {
        addInQueue() {
            axios.get('/api/queue/add/' + this.user.id, {
            })
            .then((response) => {
                if(response.data === 1) {
                    this.inactivityTimer();
                }
                this.currentPosition = response.data;
            })
        },
        checkPosition() {
            let self = this;
            let untilFirst = setInterval(function() {
                axios.get('/api/checkPosition/' + self.user.id, {
                }).then((response) => {
                    self.currentPosition = response.data;
                    console.log(this.currentPosition);
                    if(response.data === 1) {
                        if(self.timer === null) {
                            self.inactivityTimer();
                        }

                        clearInterval(untilFirst);
                    }
                })
            }, 4000);
        },
        inactivityTimer() {
            var countDownDate = new Date().getTime() + 60 * 10 * 50;
            let self = this;

            setInterval(function () {
                let now = new Date().getTime();
                let distance = countDownDate - now;
                let days = Math.floor(distance / (1000 * 60 * 60 * 24)),
                    hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                    seconds = Math.floor((distance % (1000 * 60)) / 1000),
                    zaTimer = "Timp ramas: ";
                if(minutes) zaTimer += minutes + " minute ";
                if(seconds) zaTimer += seconds + " secunde";

                if(distance <= 0) {
                    self.timer = 'Ai pierdut randul la coada!';
                    axios.get('/api/queue/removeInactive/' + self.user.id, {
                    }).then((response) => {
                        window.location = '/home';
                    })
                } else {
                    self.timer = zaTimer;
                }
            }, 1000);
        }
    },
    mounted() {
        this.addInQueue();
        this.checkPosition();
    }
}
</script>
