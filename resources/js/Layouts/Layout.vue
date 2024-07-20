<template>
    <div>
        <header>
            <nav>
                <div>
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/services">Services</a>
                    <a href="/contact">Contact</a>
                </div>
            </nav>
        </header>
        <main>
            <slot></slot>
        </main>
        <footer>
            <p>&copy; Book Store</p>
        </footer>
    </div>
</template>