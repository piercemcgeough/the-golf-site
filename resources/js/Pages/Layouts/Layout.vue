<template>
    <div>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
                <div class="container">

                    <a class="navbar-brand" href="/">The Golf Site</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/clubs">Clubs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/members">Members</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <slot />
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
