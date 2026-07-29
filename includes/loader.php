<?php

declare(strict_types=1);

/**
 * Obtiene todos los proyectos.
 */
function getProjects(): array
{
    static $projects = null;

    if ($projects === null) {
        $projects = require __DIR__ . '/../config/projects.php';
    }

    return $projects;
}

/**
 * Busca un proyecto por su slug.
 */
function findProjectBySlug(string $slug): ?array
{
    foreach (getProjects() as $project) {

        if ($project['slug'] === $slug) {
            return $project;
        }

    }

    return null;
}