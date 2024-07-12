<template>
    <div class="container-docente">
        <div
            v-for="docente in docentes"
            :key="docente.id"
            class="container-docente-flex"
        >
            <img :src="docente.imagen" class="imagen-docente" :alt="docente.nombre">
            <div class="container-info">
                <p class="info">Nombre: <span class="info-span">{{ docente.nombre }}</span></p>
                <p class="info info-yellow">Curso: <span class="info-span">{{ docente.curso }}</span></p>
                <p class="info info-white">Hora: <span class="info-span">{{ docente.hora }}</span></p>
                <p class="info info-white">Aula: <span class="info-span">{{ docente.aula }}</span></p>
                <p class="info info-yellow">Estado: <span class="info-span">{{ docente.en_clase ? 'En clase' : 'AUSENTE'}}</span></p>
            </div>
            <div class="container-id">
                <p class="info">{{ docente.id }}</p>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            docentes: [],
        };
    },
    mounted() {
        axios
            .get("/docentes")
            .then((response) => {
                this.docentes = response.data;
            })
            .catch((error) => {
                console.error("Error al obtener docentes", error);
            });
    },
};
</script>

<style scoped>

.container-docente {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 10px;
}

.container-docente-flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px; /* Espacio entre la imagen y la información */
    border: 1px solid #4CE15B ;
    padding: 10px;
    border-radius: 5px;
    background-color: #4CE15B;
    position: relative;
}

.imagen-docente {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: contain;
    background: #e3e3e380;
}

.container-info {
    display: flex;
    flex-direction: column;
}

.info {
    margin: 2px 0; /* Reduce el espacio entre las líneas de información */
    text-transform: uppercase;
    font-weight: bold;
}

.info-yellow {
    color: #F8F838;
}

.info-white {
    color: #FFFFFF;
}

.info-span {
    font-weight: bold;
}

.container-id {
    position: absolute;
    top: 10px;
    right: 10px;
}

</style>
