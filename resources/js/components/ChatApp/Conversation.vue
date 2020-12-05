<template>
    <div class="card card-custom">
        <div class="card-header align-items-center px-4 py-3" v-if="user.id === medic.id">
            <div class="text-left flex-grow-1">
                <button type="button" data-toggle="modal" data-target="#prescriptionModal" class="btn btn-warning btn-sm">
                    Ofera reteta
                </button>
            </div>
            <div class="text-center">
                <button type="button" @click="stopConversation" class="btn btn-warning btn-sm">
                    Inchide conversatia
                </button>
            </div>
            <div class="text-right flex-grow-1">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bookingModal">
                    Programeaza pacient
                </button>
            </div>
        </div>
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
                                        {{ contact.firstname }}
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
        <div class="modal fade" id="prescriptionModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body" style="height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="text-center">
                                    Creeaza o reteta
                                    <hr>
                                </h4>
                                <form class="form">
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" v-model="title" placeholder="Titlu">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="county" placeholder="Judet">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="city" placeholder="Oras">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="cnp" placeholder="Cod numeric personal">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="age" placeholder="Varsta">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="sex" placeholder="Sex">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" v-model="address" placeholder="Adresa">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-12">
                                            <textarea type="text" class="form-control" v-model="diagnostic" placeholder="Diagnostic"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-12">
                                            <textarea type="text" class="form-control" v-model="prescription" placeholder="Reteta propriu-zisa"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Anuleaza</button>
                        <button type="button" class="btn btn-primary font-weight-bold" @click="createPrescription" data-dismiss="modal">Creeaza</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body" style="height: 300px;">
                        <h4 class="text-center">
                            Programeaza pacient
                            <hr>
                        </h4>
                        <form class="form">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label class="label">Zi</label>
                                    <input type="date" class="form-control" v-model="date" placeholder="Select date">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label">Ora</label>
                                    <input type="time" class="form-control" v-model="time" placeholder="Select date">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Anuleaza</button>
                        <button type="button" class="btn btn-primary font-weight-bold" @click="createBooking" data-dismiss="modal">Creeaza</button>
                    </div>
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

            city: '',
            county: '',
            cnp: '',
            sex: '',
            age: '',
            address: '',
            diagnostic: '',
            prescription: '',
            title: '',
            startsAt: '',
            date: '',
            time: '',
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
        },
        createPrescription() {
            axios.post('/api/prescription/add', {
                title: this.title,
                city: this.city,
                county: this.county,
                age: this.age,
                sex: this.sex,
                cnp: this.cnp,
                address: this.address,
                prescription: this.prescription,
                diagnostic: this.diagnostic,
                medicId: this.medic.id,
                pacientId: this.contact.id
            }).then(response => {
                toastr.success("Reteta a fost creeata!");
            })
        },
        createBooking() {
            axios.post('/api/booking/add', {
                date: this.date,
                time: this.time,
                medicId: this.medic.id,
                pacientId: this.contact.id
            }).then(response => {
                toastr.success("Programarea a fost creeata!");
            })
        },
        stopConversation() {
            console.log('test');
            axios.get('/api/endConversation/' + this.medic.id + '/' + this.contact.id,{

            })
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

        examinationChannel.bind('endConversation', (data) => {
            if(this.user.id === this.medic.id) {
                location.reload();
            } else {
                window.location = '/home';
            }
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
