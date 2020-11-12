<template>
    <div>
        <h2 class="text-center">note taking app</h2>
        <div class="well">
            <h4>type some notes..</h4>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" maxlength="256">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm">
                            ADD
                        </button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">
                <li>
                    <p>
                        <small class="text-muted"><em>1 min ago</em></small>
                        my new idea
                    </p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

export default {

}

</script>

<style>
</style>