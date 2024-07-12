<template>
    <div class="container-video-flex">
        <div
            v-for="video in videos"
            :key="video.id"
            class="container-video"
        >
            <video controls class="video-info">
                <source :src="video.url" type="video/mp4" class="info"/>
            </video>
        </div>
    </div>
</template>

<script>

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
    height: 100%;
}

.container-video-flex {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 10px;
}

.container-video {
    border: 1px solid #e3e3e380 ; /**#769DAC */
    padding: 10px;
    border-radius: 5px;
    background-color: #e3e3e380;
}
.video-info {
    border-radius: 5px;
}

</style>
