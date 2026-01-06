<!-- Footer -->
<footer class="py-8 border-t border-slate-800 text-center text-slate-500 font-mono text-sm">
    <p>Designé & Développé par <?php echo isset($student_name) ? $student_name : 'Étudiant'; ?> - <?php echo isset($current_year) ? $current_year : '2026'; ?></p>

    <div class="mt-2 flex justify-center gap-4">
        <a href="<?php echo isset($linkedin_link) ? $linkedin_link : '#'; ?>" target="_blank" class="hover:text-tech-accent transition-colors">
            <i class="fa-brands fa-linkedin text-xl"></i>
        </a>
        <a href="<?php echo isset($github_link) ? $github_link : '#'; ?>" target="_blank" class="hover:text-tech-accent transition-colors">
            <i class="fa-brands fa-github text-xl"></i>
        </a>
    </div>
</footer>

</body>
</html>