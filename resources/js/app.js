import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import VideoChat from './components/VideoChat.vue';

// Create the Vue app
const app = createApp({});

// Register components correctly for Vue 3
app.component('example-component', ExampleComponent);
app.component('video-chat', VideoChat);

// Mount the app to the #app element
app.mount('#app');
