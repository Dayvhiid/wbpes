<template>
    <div>
      <h2>Join a Video Chat Room</h2>
      <input v-model="roomNumber" placeholder="Enter Room Number" />
      <button @click="joinRoom">Join Room</button>
      <div v-if="currentRoom">
        <p>Successfully joined room: {{ currentRoom }}</p>
        <!-- Video chat UI here -->
      </div>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        roomNumber: "",
        currentRoom: null,
      };
    },
    methods: {
      async joinRoom() {
        if (!this.roomNumber) {
          alert("Please enter a room number");
          return;
        }
        
        try {
          const response = await axios.post("http://your-backend.com/api/join-room", {
            roomNumber: this.roomNumber,
          });
  
          if (response.data.success) {
            this.currentRoom = this.roomNumber;
            console.log(`Successfully joined a Room: ${this.roomNumber}`);
            // Initialize video chat connection here
          } else {
            alert("Room not found!");
          }
        } catch (error) {
          console.error("Error joining room", error);
          alert("Failed to join the room");
        }
      },
    },
  };
  </script>
  