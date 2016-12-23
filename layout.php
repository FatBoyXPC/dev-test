<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/site.js"></script>

    <title>Starships</title>
</head>
<body>
    <div class="container background">
        <div class="row">
            <div class="col-xs-12 banner text-center">Starships</div>
            <div class="col-xs-12 content">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                        <?php for ($i = 1; $i < ($starshipsPagesCount + 1); $i++) : ?>
                            <?php if ($pageNumber == $i) : ?>
                                <li class="active"><a href="/?page=<?=$i; ?>"><?=$i; ?></a></li>
                            <?php else : ?>
                                <li><a href="/?page=<?=$i; ?>"><?=$i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                <?php foreach ($starshipsInfo->results as $starship) : ?>
                    <div class="col-xs-12 starship-item">
                        <div clas="row">
                            <div class="col-xs-12 col-sm-push-8 col-sm-4">
                                <img src="/img/starships/<?=getStarshipImageName($starship->name) ?>" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-pull-4 col-sm-8 text-left">
                                <div class="row">
                                    <div class="col-xs-12 visible-xs">
                                        <h3><?=$starship->name ?></h3>
                                    </div>
                                    <div class="hidden-xs col-sm-12">
                                        <h2><?=$starship->name ?></h2>
                                    </div>
                                    <div class="col-xs-12 text-left info">
                                        <div><strong>Length: </strong> <?=$starship->length ?></div>
                                        <div><strong>Crew: </strong> <?=$starship->crew ?></div>
                                        <div><strong>Passengers: </strong> <?=$starship->passengers ?></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div><button class="btn btn-default" data-ship-url="<?=$starship->url ?>">More Info &raquo;</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="starship-info" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="manufacturer"><strong>Manufacturer: </strong><span></span></div>
                    <div class="class"><strong>Starship Class: </strong><span></span></div>
                    <div class="rating"><strong>Hyperdrive Rating: </strong><span></span></div>
                    <div class="capacity"><strong>Cargo Capacity: </strong><span></span></div>
                    <div class="cost"><strong>Cost in Credits: </strong><span></span></div>
                    <div class="max-speed"><strong>Max Atmosphereing Speed: </strong><span></span></div>
                    <div class="mglt"><strong>MGLT: </strong><span></span></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
