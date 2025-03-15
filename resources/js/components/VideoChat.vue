<template>
    <div class="p-5">
        <h1 class="text-2xl mb-4">Laravel Video Chat</h1>
        <div class="grid grid-flow-row grid-cols-3 grid-rows-3 gap-4 bg-black/]">
            <div id="my-video-chat-window"></div>
            <div id="video-chat-window"></div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Twilio from 'twilio-video';
import { connect, createLocalVideoTrack } from "twilio-video";

export default {
    name: 'video-chat',
    data: function () {
        return {
            accessToken: ''
        }
    },
    methods: {
        getAccessToken: function () {
            const _this = this;
            // const axios = require('axios');
            
            // Request a new token
            axios.get('/api/access_token')
                .then(function (response) {
                    _this.accessToken = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                    _this.connectToRoom();
                });
        },

        connectToRoom: function () {
            // const { connect, createLocalVideoTrack } = require('twilio-video');

            Twilio.connect(this.accessToken, { name: 'cool room' }).then(room => {
                console.log(`Successfully joined a Room: ${room}`);

                const videoChatWindow = document.getElementById('video-chat-window');
                if (!videoChatWindow) {
                    console.error("video-chat-window element not found.");
                    return;
                }

                // Attach local video track
                createLocalVideoTrack().then(track => {
                    videoChatWindow.appendChild(track.attach());
                });

                // Handle remote participants
                room.on('participantConnected', participant => {
                    console.log(`A remote Participant connected: ${participant.identity}`);

                    participant.tracks.forEach(publication => {
                        if (publication.isSubscribed) {
                            const track = publication.track;
                            videoChatWindow.appendChild(track.attach());
                        }
                    });

                    participant.on('trackSubscribed', track => {
                        videoChatWindow.appendChild(track.attach());
                    });
                });

            }).catch(error => {
                console.error(`Unable to connect to Room: ${error.message}`);
            });
        }
    },
    mounted: function () {
        console.log('Video chat room loading...');
        this.getAccessToken();
    }
}
</script>
