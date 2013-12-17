<?php

while ($input = fgets(STDIN)) {
    fwrite(STDOUT, $input);
}
fwrite(STDOUT, "FIN\n");


