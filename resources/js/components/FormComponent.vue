<template>
    <div class="container text-center py-5 mx-5">
        <div class="card shadow w-50 m-auto">
            <form action="/orders/" method="post">
                <input type="hidden" name="_token" v-bind:value="token">
                <div class="card-header">
                    <div class="card-title">Crear órden</div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="identification_card" class="col-sm-4 col-form-label">Numero de identificacion del usuario</label>
                        <div class="col-sm-8">
                            <input type="text" name="identification_card" class="form-control" id="identification_card">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_id" class="col-sm-4 col-form-label">Seleccione un evento</label>
                        <select name="event_id" id="event_id" class="form-control row col-sm-8">
                            <option selected disabled>
                                seleccione un evento
                            </option>
                            <div v-for="(event) in events">
                                <option value={{event.id}}>
                                    {{event.name}}
                                </option>
                            </div>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="is_student" class="col-sm-4 col-form-label">Es estudiante?</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="is_student" id="is_student" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="true">si</option>
                                <option value="false">no</option>
                            </select>
                        </div>
                    </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">generar</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "FormComponent",
    data(){
        return {
            token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>
