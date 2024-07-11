<template>
    <div class="container-video">
        <div v-for="video in videos" :key="video.id">
            <video controls>
                <source :src="video.url" type="video/mp4" />
            </video>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            videos: [],
        };
    },
    mounted() {
        axios
            .get("/videos")
            .then((response) => {
                console.log(response);
                this.videos = response.data;
            })
            .catch((error) => {
                console.error("Error al obtener videos", error);
            });
    },
};
</script>

<style>
video {
    width: 100%;
    height: 150px;
    /* height: 100%; */
}

.container-video {
    display: flex;
    flex-direction: column;
}
</style>
