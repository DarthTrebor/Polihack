<template>
    <div class="card card-custom">
        <div class="card-body">
            <div class="scroll scroll-pull" data-mobile-height="350">
                <div class="messages">
                    <slot v-for="message in messages">
                        <div class="d-flex flex-column mb-5" v-bind:class="{'align-items-end' : message.senderId === user.id,  'align-items-start' : message.senderId !== user.id}">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-40 mr-3">
                                    <img alt="Pic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp42BoZ9_X2cAsWbOqA8U3CCjRPAP65-msNg&usqp=CAU">
                                </div>
                                <div>
                                    <a v-if="message.senderId !== user.id" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">
                                        {{ user.firstname }}
                                    </a>
                                    <a v-else class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">
                                        Tu
                                    </a>
                                    <span class="text-muted font-size-sm">{{ dateFormat(message.created_at) }}</span>
                                </div>
                            </div>
                            <div class="mt-2 rounded p-5 text-dark-50 font-weight-bold font-size-lg text-left max-w-400px" v-bind:class="{'bg-light' : message.senderId === user.id,  'bg-light-success' : message.senderId !== user.id}">{{ message.text }}</div>
                        </div>
                    </slot>
                </div>
            </div>
        </div>
        <div class="card-footer align-items-center">
            <textarea v-model="text" class="form-control border-0 p-0" rows="2" placeholder="Scrie un mesaj"></textarea>
            <div class="d-flex align-items-center justify-content-between mt-5">
                <div class="mr-3">
                    <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                        <i class="flaticon2-photograph icon-lg"></i>
                    </a>
                    <a href="#" class="btn btn-clean btn-icon btn-md">
                        <i class="flaticon2-photo-camera icon-lg"></i>
                    </a>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6" @click="sendMessage">Trimite</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        user: Object,
        medic: Object
    },
    data() {
        return {
            conversation: null,
            messages: [],
            text: '',
            contact: null,
        }
    },
    methods: {
        onLoad() {
            if(this.user.id !== this.medic.id) {
                axios.get('/api/examination-room/newConversation/' + this.user.id + '/' + this.medic.id, {
                })
            }
        },
        sendMessage() {
            if(this.text === '') return;

            axios.post('/api/examination-room/sendMessage', {
                senderId: this.user.id,
                receiverId: this.contact.id,
                text: this.text,
                conversationId : this.conversation.id
            })
            .then((response) => {

            })
            .catch((error)=>console.log(error));
            this.text = '';
        },
        dateFormat(date) {
            return moment(date).format("LT")
        }
    },
    mounted: function() {
        Pusher.logToConsole = true;

        let pusher = new Pusher('12489e34745d24e05daa', {
            cluster: 'eu'
        });

        let examinationChannel = pusher.subscribe('examination-channel');

        examinationChannel.bind('newMessage', (data) => {
            this.messages.push(data.message);
        });

        examinationChannel.bind('newConversation', (data) => {
            this.conversation = data.conversation;

            if(this.user.id === this.medic.id) {
                this.contact = data.conversation.pacient;
            } else {
                this.contact = data.conversation.medic;
            }
        })

        this.onLoad();
    }
}
</script>
