<template>
    <div class="full-screen-container">
        <div class="container-titulo-flex">
            <span class="titulo">PANEL DE AULAS - (20 clases)</span>
            <span class="fecha">{{ formattedDate }}</span>
            <span class="paginado">Pag 1 de 1</span>
        </div>
        <div class="container-card">
            <DocenteVue class="docente" />
            <VideoPlayerVue class="video" />
        </div>
    </div>
</template>

<script>
import DocenteVue from "./DocenteVue.vue";
import VideoPlayerVue from "./VideoPlayerVue.vue";

export default {
    components: {
        DocenteVue,
        VideoPlayerVue,
    },
    data() {
        return {
            formattedDate: "",
        };
    },
    methods: {
        getCurrentFormattedDate() {
            const currentDate = new Date();
            const day = currentDate.getDate().toString().padStart(2, "0");

            const monthNames = [ "ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"];
            const month = monthNames[currentDate.getMonth()];

            const year = currentDate.getFullYear().toString().slice(-2); // Obtiene los últimos 2 dígitos del año

            const hours = currentDate.getHours().toString().padStart(2, "0");
            const minutes = currentDate.getMinutes().toString().padStart(2, "0");

            this.formattedDate = `${day}-${month}-${year} ${hours}:${minutes}`;
        },
    },
    created() {
        this.getCurrentFormattedDate();
    },
};
</script>

<style scoped>
.full-screen-container {
    height: 100vh;
    width: 100vw;
    background-color: #529ae2;
    /* -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale; */
}
.container-titulo-flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 0.625rem;
}
.titulo,
.fecha,
.paginado {
    color: #fff;
}

.container-card {
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 10px;
    background-color: #529ae2;
}
.docente {
    flex: 1;
}
.video {
    flex: 1;
}

/**Media querie */
@media (max-width: 768px) {
    .container-card {
        flex-direction: column;
    }

    .docente {
        flex: 1;
    }

    .video {
        flex: 1;
    }
}
</style>
